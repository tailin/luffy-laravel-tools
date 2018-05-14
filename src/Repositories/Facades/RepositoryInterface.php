<?php

namespace luffyzhao\laravelTools\Repositories\Facades;

use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    /**
     * 获取Model.
     *
     * @method getModel
     *
     * @return Model
     *
     * @author luffyzhao@vip.126.com
     */
    public function getModel();

    /**
     * 获取数据表名.
     *
     * @method getTable
     *
     * @return string
     *
     * @author luffyzhao@vip.126.com
     */
    public function getTable();

    /**
     * 通过主键查找一个模型.
     *
     * @method find
     *
     * @param int   $id      主键ID
     * @param array $columns 获取字段
     *
     * @return Illuminate\Support\Collection|static|null
     *
     * @author luffyzhao@vip.126.com
     */
    public function find($id, array $columns = ['*']);

    /**
     * 通过主键查找多个模型。
     *
     * @param \Illuminate\Contracts\Support\Arrayable|array $ids     主键IDs
     * @param array                                         $columns 获取字段
     *
     * @return \Illuminate\Database\Eloquent\Collection
     *
     * @author luffyzhao@vip.126.com
     */
    public function findMany($ids, $columns = ['*']);

    /**
     * 通过where条件查找一个模型.
     *
     * @method findWhere
     *
     * @param array $attributes Where条件
     * @param array $columns    获取字段
     *
     * @return Illuminate\Support\Collection|static|null
     *
     * @author luffyzhao@vip.126.com
     */
    public function findWhere(array $attributes, array $columns = ['*']);

    /**
     * 从查询的第一个结果获取单个列的值。
     *
     * @method findValue
     *
     * @param array  $attributes Where条件
     * @param string $columns    获取字段
     *
     * @return mixed
     *
     * @author luffyzhao@vip.126.com
     */
    public function findValue(array $attributes, string $columns);

    /**
     * 获取全部模型.
     *
     * @method get
     *
     * @param array $columns 获取字段
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     *
     * @author luffyzhao@vip.126.com
     */
    public function get(array $columns);

    /**
     * 通过where条件查找多个模型.
     *
     * @method getWhere
     *
     * @param array $attributes Where条件
     * @param array $columns    获取字段
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     *
     * @author luffyzhao@vip.126.com
     */
    public function getWhere(array $attributes, array $columns = ['*']);

    /**
     * 分块处理
     * @method chunkById
     * @param array $attributes Where条件
     * @param $count 每次获取$count条数据
     * @param callable $callback 回调
     * @param null $column 字段
     * @param null $alias 表别名
     *
     * @return mixed
     *
     * @author luffyzhao@vip.126.com
     */
    public function chunkById(array $attributes, $count, callable $callback, $column = null, $alias = null);

    /**
     * 获取与属性匹配的第一个记录不存在就创建。
     *
     * @method firstOrCreate
     *
     * @param array $attributes Where条件
     * @param array $values     附加填充值
     *
     * @return \Illuminate\Database\Eloquent\Model
     *
     * @author luffyzhao@vip.126.com
     */
    public function firstOrCreate(array $attributes, array $values = []);

    /**
     * 修改与属性匹配的记录不存在就创建。
     *
     * @method updateOrCreate
     *
     * @param array $attributes Where条件
     * @param array $values     附加填充值
     *
     * @return \Illuminate\Database\Eloquent\Model
     *
     * @author luffyzhao@vip.126.com
     */
    public function updateOrCreate(array $attributes, array $values = []);

    /**
     * 查找与属性匹配的记录并分页.
     *
     * @method paginate
     *
     * @param array  $attributes Where条件
     * @param [type] $perPage    每页多少条
     * @param array  $columns    获取字段
     * @param string $pageName   分页input字段
     * @param [type] $page       当前页码
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     *
     * @author luffyzhao@vip.126.com
     */
    public function paginate(array $attributes, $perPage = null, $columns = ['*'], $pageName = 'page', $page = null);

    /**
     * 查找与属性匹配的记录并分页.（简单版）.
     *
     * @method simplePaginate
     *
     * @param array  $attributes Where条件
     * @param [type] $perPage    多少条
     * @param array  $columns    获取字段
     *
     * @return \Illuminate\Contracts\Pagination\Paginator
     *
     * @author luffyzhao@vip.126.com
     */
    public function simplePaginate(array $attributes, $perPage = null, $columns = ['*']);

    /**
     * 创建模型.
     *
     * @method create
     *
     * @param array $attributes 属性
     *
     * @return \Illuminate\Database\Eloquent\Model
     *
     * @author luffyzhao@vip.126.com
     */
    public function create(array $attributes = []);

    /**
     * 更新模型.
     *
     * @method update
     *
     * @param array $values 更新数据
     * @param Model $model
     *
     * @return \Illuminate\Database\Eloquent\Model
     *
     * @author luffyzhao@vip.126.com
     */
    public function update(Model $model, array $values);

    /**
     * 删除数据模型.
     *
     * @method delete
     *
     * @param Model $model 删除模型
     *
     * @return mixed
     *
     * @author luffyzhao@vip.126.com
     */
    public function delete(Model $model);

    /**
     * 使实体的一个新实例查询。
     *
     * @param array $with
     */
    public function make(array $with = array());

    /**
     * 添加一个获取多个作用域
     *
     * @method scope
     *
     * @param array $scope [description]
     *
     * @return [type] [description]
     *
     * @author luffyzhao@vip.126.com
     */
    public function scope(array $scope);
}