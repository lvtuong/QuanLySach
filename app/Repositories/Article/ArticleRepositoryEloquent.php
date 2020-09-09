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
     * Boot up the repository, pushing criteria
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
     * get all data.
     */
    public function getAll()
    {
        // TODO: Implement all() method.

        return $this->article->all();
    }

    /**
     * get one data.
     */
    public function getOne($id)
    {
        // TODO: Implement getOne() method.
        return $this->article->find($id);
    }

    /**
     * create Article.
     */
    public function createArticle($title, $body)
    {
        $this->article->create([
            'title' => $title,
            'body' => $body,
        ]);

        return $this->article->all();
    }

    /**
     * update data.
     */
    public function updateArticle($id, $title, $body)
    {
        // TODO: Implement update() method.
        $update = $this->article->find($id);

        return $update->update([
            'title' => $title,
            'body' => $body,
        ]);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $delete = $this->article->find($id);
        $delete->delete();

    }
}
