<?php

namespace Models;

interface Repository
{
    public function add($item);
    public function update($item);
    public function delete($item);

    public function getById($postId);
    public function getByIds(array $id);
}