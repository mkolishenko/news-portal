<?php

namespace App\Service\Home;

use App\Dto\Post;
use App\Post\PostsCollection;

/**
 * Fake home page service that generates test data.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
final class FakeHomeService implements HomePageServiceInterface
{
    private const POSTS_COUNT = 1;

    /**
     * {@inheritdoc}
     */
    public function getPosts(): PostsCollection
    {
        $faker = \Faker\Factory::create();
        $collection = new PostsCollection();

        for ($i = 0; $i < self::POSTS_COUNT; $i++) {
            $dto = new Post(
                $faker->text,
                $faker->dateTime
            );

            $dto->setImage($faker->imageUrl());

            $collection->addPost($dto);
        }

        return $collection;
    }
}
