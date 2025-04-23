<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group AddNotes
     */
    public function testAddNotes(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') //mengunjungi halaman dengan router /
                    ->assertSee('Modul 3') //teks yang berada di halaman tersebut
                    ->ClickLink('Log in') //menekan log in
                    ->assertPathIs('/login') //path yang dijalankan; menampilkan login
                    ->type('email', 'lakshmiiii@gmail.com') //menuliskan email
                    ->type('password', '12345678') //menuliskan password
                    ->press('LOG IN') //menekan button Log in
                    ->assertPathIs('/dashboard') //menampilkan dashboard

                    ->clickLink('Notes') //mengklik 'Notes'
                    ->clickLink('Create Note') //mengklik 'Create Note'
                    ->type('title', 'praktikum ppl modul 3') //mengisi input 'title'
                    ->type('description', 'praktikum ppl modul 3 unit testing') //mengisi input 'description'
                    ->press('CREATE') //menekan tombol 'CREATE'
                    ->assertsee('new note has been created'); //melihat teks 'new note has been created'
        });
    }
}
