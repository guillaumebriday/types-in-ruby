<?php

interface Animal {
  public function speak(): void;
}

class Dog implements Animal {
  public function speak(): void {
    echo "whoaf";
  }
}

class Cat implements Animal {
  public function speak(): void {
    echo "miaou";
  }
}

function speak(Dog $animal): void {
  $animal->speak();
}

speak(new Dog);
echo "\n";

speak(new Cat);
echo "\n";
