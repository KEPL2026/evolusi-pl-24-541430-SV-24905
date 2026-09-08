const cards = window.kanjiCards;

const character = document.getElementById('kanji-character');
const meaning = document.getElementById('kanji-meaning');
const onyomi = document.getElementById('kanji-onyomi');
const kunyomi = document.getElementById('kanji-kunyomi');
const example = document.getElementById('kanji-example');

const progress = document.getElementById('card-progress');
const answerPanel = document.getElementById('answer-panel');
const answerButton = document.getElementById('answer-button');
const previousButton = document.getElementById('previous-button');
const nextButton = document.getElementById('next-button');

// mulai dari kartu pertama
let currentIndex = 0;

function renderCard() {
    const card = cards[currentIndex];

    character.textContent = card.character;
    meaning.textContent = card.meaning;
    onyomi.textContent = card.onyomi;
    kunyomi.textContent = card.kunyomi;
    example.textContent = card.example;

    progress.textContent = `${currentIndex + 1} / ${cards.length}`;

    // sembunyikan jawaban tiap pindah kartu
    answerPanel.hidden = true;
    answerButton.textContent = 'lihat jawaban';

    previousButton.disabled = currentIndex === 0;
    nextButton.disabled = currentIndex === cards.length - 1;
}

answerButton.addEventListener('click', () => {
    const isHidden = answerPanel.hidden;

    answerPanel.hidden = !isHidden;

    answerButton.textContent = isHidden
        ? 'sembunyikan jawaban'
        : 'lihat jawaban';
});

previousButton.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex -= 1;
        renderCard();
    }
});

nextButton.addEventListener('click', () => {
    if (currentIndex < cards.length - 1) {
        currentIndex += 1;
        renderCard();
    }
});

renderCard();
