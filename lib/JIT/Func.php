<?php

/*
 * This file is part of PHP-Compiler, a PHP CFG Compiler for PHP code
 *
 * @copyright 2015 Anthony Ferrara. All rights reserved
 * @license MIT See LICENSE at the root of the project for more info
 */

namespace PHPCompiler\JIT;

interface Func {
    
    public function call(\gcc_jit_rvalue_ptr ...$args): \gcc_jit_rvalue_ptr;

}