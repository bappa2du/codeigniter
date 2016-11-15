<?php

use Illuminate\Database\Capsule\Manager as Capsule;

class EloquentHook
{

    /**
     * Holds the instance
     * @var object
     */
    protected $instance;

    /**
     * Gets CI instance
     */
    private function setInstance()
    {
        $this->instance =& get_instance();
    }

    /**
     * Loads database
     */
    private function loadDatabase()
    {
        $this->instance->load->database();
    }

    /**
     * Returns the instance of the db
     * @return object
     */
    private function getDB()
    {
        return $this->instance->db;
    }

    public function bootEloquent()
    {

        $this->setInstance();

        $this->loadDatabase();

        $config = $this->getDB();

        $capsule = new Capsule;

        $capsule->addConnection([
            'driver'    => $_ENV['DB_DRIVER'],
            'host'      => $_ENV['DB_HOST'],
            'database'  => $_ENV['DB_DATABASE'],
            'username'  => $_ENV['DB_USER'],
            'password'  => $_ENV['DB_PASSWORD'],
            'charset'   => $config->char_set,
            'collation' => $config->dbcollat,
            'prefix'    => $_ENV['DB_PREFIX'],
        ]);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }

}
