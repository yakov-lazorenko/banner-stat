<?php

namespace Library\DependencyInjection;


interface IContainer
{
    public function has(string $object_name);

    public function get(string $object_name);

    public function getObjects();

    public function set(string $object_name, object $object_instance);

    public function registerObject(string $object_name, object $object_instance);

    public function registerObjects(array $objects);

    public function delete(string $object_name);
}
