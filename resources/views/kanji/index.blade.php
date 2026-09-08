<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kanji Bites</title>

    <link rel="stylesheet" href="{{ asset('css/kanji.css') }}">
</head>
<body>
    <header class="topbar">
        <a href="/" class="brand">kanji bites</a>
        <span class="japanese-label">日本語</span>
    </header>

    <main class="page">
        <section class="intro">
            <p class="eyebrow">flashcard kanji n5</p>

            <h1>belajar kanji, satu kartu sekali.</h1>

            <p class="intro-text">
                coba ingat arti dan bacaannya dulu, lalu buka jawaban untuk mengecek.
            </p>
        </section>

        <section class="study-section">
            <div class="flashcard">
                <div class="card-top">
                    <span id="card-progress">1 / {{ count($kanji) }}</span>
                    <span class="level-badge">n5</span>
                </div>

                <div id="kanji-character" class="kanji-character">
                    {{ $kanji[0]['character'] }}
                </div>

                <button id="answer-button" class="primary-button">
                    lihat jawaban
                </button>

                <div id="answer-panel" class="answer-panel" hidden>
                    <div class="answer-item">
                        <span>arti</span>
                        <strong id="kanji-meaning">
                            {{ $kanji[0]['meaning'] }}
                        </strong>
                    </div>

                    <div class="answer-item">
                        <span>onyomi</span>
                        <strong id="kanji-onyomi">
                            {{ $kanji[0]['onyomi'] }}
                        </strong>
                    </div>

                    <div class="answer-item">
                        <span>kunyomi</span>
                        <strong id="kanji-kunyomi">
                            {{ $kanji[0]['kunyomi'] }}
                        </strong>
                    </div>

                    <div class="answer-item">
                        <span>contoh</span>
                        <strong id="kanji-example">
                            {{ $kanji[0]['example'] }}
                        </strong>
                    </div>
                </div>
            </div>

            <div class="navigation">
                <button id="previous-button" class="navigation-button">
                    ← sebelumnya
                </button>

                <button id="next-button" class="navigation-button">
                    berikutnya →
                </button>
            </div>
        </section>

        <section class="study-note">
            <div class="note-line"></div>

            <div>
                <strong>tiny study tip</strong>
                <p>coba jawab sendiri sebelum membuka bagian jawaban.</p>
            </div>
        </section>
    </main>

    <script>
        window.kanjiCards = @json($kanji);
    </script>

    <script src="{{ asset('js/kanji.js') }}" defer></script>
</body>
</html>
