<?php

namespace App\Http\Controllers;

trait NewsTrait
{
    public function getNews(int $id = null): array
    {
        $news = [];
        $quantityNews = 10;
        if ($id === null) {
            for ($i = 1; $i < $quantityNews; $i++) {
                $news[] = [
                    'id' => $i,
                    'title' => fake('ru')->jobTitle(),
                    'description' => fake('ru_RU')->text(100),
                    'author' => fake()->userName(),
                    'create_at' => now()->format('d-m-Y H:i'),
                ];
            }
            return $news;
        }

        return [
            'id' => $id,
            'title' => fake('ru')->jobTitle(),
            'description' => fake('ru_RU')->text(100),
            'author' => fake()->userName(),
            'create_at' => now()->format('d-m-Y H:i'),
        ];
    }
}
