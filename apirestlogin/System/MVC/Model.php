<?php

/**
 *
 * This file is part of mvc-rest-api for PHP.
 *
 */
namespace MVC;

/**
 * Class Model, a port of MVC
 *
 * @author Sougui Asma <sougui.asma@gmail.com>
 *
 * @package MVC
 */
class Model {

    /**
     * @var
     */
    public $db;

    /**
     *  Construct
     */
    public function __construct() {
        $this->db = new \Database\DatabaseAdapter(
            DATABASE['Driver'],
            DATABASE['Host'],
            DATABASE['User'],
            DATABASE['Pass'],
            DATABASE['Name'],
            DATABASE['Port']    
        );
    }
}
