<?php

namespace Packages\Server\Repository\Base;

interface RepositoryInterface
{
    /**
     * Get all
     * @return mixed
     */
    public function getAll();

    /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create($attributes = []);

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return mixed
     */
    public function update($id, $attributes = []);

    /**
     * Delete
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * where
     * @param $conditions
     * @return mixed
     */
    public function where($conditions);

    /**
     * whereRaw
     * @param $conditions
     * @return mixed
     */
    public function whereRaw(string $query);

    /**
     * @param array $condition
     * @return mixed
     */
    public function whereFirst(array $condition);

    /**
     * @param array $data
     * @return mixed
     */
    public function insertGetId(array $data);

    /**
     * @param string $query
     * @return mixed
     */
    public function queryRaw(string $query);
}
