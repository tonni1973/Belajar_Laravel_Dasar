<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    public function testView(){
        $this->get('/hello')
             ->assertSeeText('Hello Tonni');

        $this->get('/hello-again')
             ->assertSeeText('Hello Foo');
    }

    public function testViewNested(){
        $this->get('/hello-world')
             ->assertSeeText('World Kareen');
    }

    public function testViewWithoutRoute(){
        $this->view('hello', ['name' => 'Eko'])->assertSeeText('Hello Eko');

        $this->view('hello.world', ['name' => 'Eko'])->assertSeeText('World Eko');
    }
}
