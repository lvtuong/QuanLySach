<?php

namespace App\Repositories\Article;

use App\Article;
use Illuminate\Container\Container as Application;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\Article\ArticleValidator;

/**
 * Class ArticleRepositoryEloquent.
 *
 * @package namespace App\Repositories\Article;
 */
class ArticleRepositoryEloquent extends BaseRepository implements ArticleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    protected $article;
    public function __construct(Application $app, Article $article)
    {
        $this->article = $article;
        parent::__construct($app);
    }

    public function model()
    {
        return Article::class;
    }
    /**
     * get all data.
     */
    public function getAll()
    {
        // TODO: Implement all() method.

        return $this->article->all();
    }
    public function getOne($id)
    {
        // TODO: Implement getOne() method.
        return $this->article->find($id);
    }

    /**
     * Boot up the repository, pushing criteria
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
