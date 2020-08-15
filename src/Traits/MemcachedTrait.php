<?php


namespace App\Traits;


use Psr\Cache\InvalidArgumentException;
use Symfony\Component\Cache\Adapter\MemcachedAdapter;

trait MemcachedTrait
{
//    private $cache;
//
//    private $memcachedClient;
//
//    public function __construct($namespace = '', $defaultLifetime = 0)
//    {
//        $this->memcachedClient = MemcachedAdapter::createConnection('memcached://localhost:32768');
//        $this->cache = new MemcachedAdapter($this->memcachedClient, $namespace, $defaultLifetime);
//    }
//
//    public function get($key)
//    {
//        try {
//            return $this->cache->get($key);
//        } catch (InvalidArgumentException $e) {
//        }
//    }
//
//    public function set($key, $value)
//    {
//        $cacheItem = $this->cache->getItem($key);
//        $cacheItem->set($value);
//        $this->cache->save($cacheItem);
//    }
}
