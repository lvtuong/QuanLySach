<?php

namespace App\Repositories\Article;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface ArticleRepository.
 *
 * @package namespace App\Repositories\Article;
 */
interface ArticleRepository extends RepositoryInterface
{
    //
    public function getAll();
    public function getOne($id);
}
