<?php

namespace App\Services;

use App\Models\Post;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store(array $data): void
    {
        try {
            DB::beginTransaction();

            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);

            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);

            $post = Post::firstOrCreate($data);
            $post->tags()->attach($tagIds);

            DB::commit();

        } catch (Exception $exception) {

            DB::rollBack();

            abort('500');

        }
    }

    public function update(array $data, Post $post): Post
    {
        try {
            DB::beginTransaction();

            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);

            if (!empty($data['preview_image'])) {
                Storage::disk('public')->delete($post->preview_image);
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }
            if (!empty($data['main_image'])) {
                Storage::disk('public')->delete($post->main_image);
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            }

            $post->update($data);
            $post->tags()->sync($tagIds);

            DB::commit();

        } catch (Exception $exception) {

            DB::rollBack();
            abort('500');
        }

        return $post;
    }
}
