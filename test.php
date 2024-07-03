<?php

class Dog {
  public function speak() {
    echo "whoaf";
  }
}

class Cat {
  public function speak() {
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
