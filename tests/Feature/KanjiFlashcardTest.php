<?php

namespace Tests\Feature;

use Tests\TestCase;

class KanjiFlashcardTest extends TestCase
{
    public function test_flashcard_page_can_be_opened(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('kanji bites');
        $response->assertSee('日');
        $response->assertSee('lihat jawaban');
    }
}
