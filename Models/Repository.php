<?php

namespace Models;

interface Repository
{
    public function add(array $data);
    public function update($item);
    public function delete($item);

    public function getById($postId);
    public function getByIds(array $id);
}