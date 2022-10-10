<!-- function factorial ($i) {
    if ($i === 1) return 1;
    return $i * factorial ($i - 1);
}

factorial(5); -->

function greet2 ($name) {
    echo 'how are you, ' . $name . '?';
}

function bye () {
    echo 'ok bye!';
}

function greet($name) {
    echo 'hello, ' . $name . '!';
    greet2 ($name);
    echo 'getting ready to say bye...';
    bye ();
}

greet ('dima');