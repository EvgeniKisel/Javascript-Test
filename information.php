<?php
    $titleNameList = [
        'easy' => 'Легкий уровень',
        'medium' => 'Средний уровень',
        'hard' => 'Сложный уровень',
    ];

    $testQuestionsList = [
        'easy' => [
            '1. Как объявить функцию в JavaScript?' => [
                'a) let myFunc = {}',
                'b) function myFunc() {}',
                'c) const myFunc = []',
                'd) create function myFunc() {}',
            ],
            '2. Чем function declaration отличается от function expression?' => [
                'a) Function declaration можно вызвать до объявления',
                'b) Function expression нельзя присваивать переменной',
                'c) Function declaration создается внутри объекта',
                'd) Разницы нет',
            ],
            '3. Как вернуть значение из функции?' => [
                'a) return value;',
                'b) exit value;',
                'c) console.log(value);',
                'd) break value;',
            ],
            '4. Какое ключевое слово используется для объявления анонимной функции?' => [
                'a) function',
                'b) anonymous',
                'c) lambda',
                'd) unnamed',
            ],
            '5. Как передать параметры в функцию?' => [
                'a) function myFunc[param1, param2] {}',
                'b) function myFunc {param1, param2} {}',
                'c) function myFunc(param1, param2) {}',
                'd) function myFunc: param1, param2 {}',
            ],
            '6. Как вызвать функцию в JavaScript?' => [
                'a) call myFunc;',
                'b) myFunc();',
                'c) invoke myFunc;',
                'd) execute myFunc;',
            ],
            '7. Можно ли передавать функцию как аргумент другой функции?' => [
                'a) Нет, функции нельзя передавать как аргументы',
                'b) Да, это называется колбэк-функция',
                'c) Только если функция объявлена через function expression',
                'd) Только в строгом режиме',
            ],
            '8. Как установить значение параметра по умолчанию в функции?' => [
                'a) function myFunc(param = 10) {}',
                'b) function myFunc(param: 10) {}',
                'c) function myFunc(param == 10) {}',
                'd) function myFunc(param, 10) {}',
            ],
            '9. Что возвращает функция без return?' => [
                'a) undefined',
                'b) null',
                'c) 0',
                'd) Пустую строку',
            ],
            '10. Можно ли объявить функцию внутри другой функции?' => [
                'a) Нет, это вызовет ошибку',
                'b) Да, это называется вложенная функция',
                'c) Только если использовать стрелочную функцию',
                'd) Только при строгом режиме',
            ],
        ],
        'medium' => [
            '1. Что такое стрелочная функция?' => [
                'a) Специальный тип функции в JavaScript',
                'b) Функция, которая всегда выполняется асинхронно',
                'c) Функция, у которой нет имени',
                'd) Функция, определенная внутри объекта',
            ],
            '2. Как вызвать метод объекта внутри самого объекта?' => [
                'a) this.methodName()',
                'b) object.methodName()',
                'c) call methodName()',
                'd) self.methodName()',
            ],
            '3. Что делает метод `call()`?' => [
                'a) Вызывает функцию с указанным контекстом',
                'b) Создает копию функции',
                'c) Останавливает выполнение функции',
                'd) Используется для объявления функций',
            ],
            '4. Как сделать функцию рекурсивной?' => [
                'a) Вызвать функцию внутри неё самой',
                'b) Использовать `setTimeout`',
                'c) Определить функцию как стрелочную',
                'd) Присвоить функцию переменной',
            ],
            '5. Какое значение `this` будет в стрелочной функции?' => [
                'a) Зависит от контекста вызова',
                'b) Всегда равно `window`',
                'c) Всегда равно `undefined`',
                'd) Наследует контекст из внешней функции',
            ],
            '6. Как передать неограниченное количество аргументов в функцию?' => [
                'a) Использовать массив аргументов',
                'b) Использовать оператор `...` (rest)',
                'c) Использовать `arguments`',
                'd) Все вышеперечисленное',
            ],
            '7. Как остановить выполнение функции?' => [
                'a) return',
                'b) break',
                'c) stop',
                'd) exit',
            ],
            '8. Что делает метод `apply()`?' => [
                'a) Вызывает функцию с массивом аргументов',
                'b) Создает новую функцию',
                'c) Изменяет `this` внутри функции',
                'd) Запрещает вызов функции',
            ],
            '9. Как работает `setTimeout`?' => [
                'a) Выполняет код сразу',
                'b) Останавливает выполнение скрипта',
                'c) Запускает функцию с задержкой',
                'd) Запускает бесконечный цикл',
            ],
            '10. В чем разница между `setTimeout` и `setInterval`?' => [
                'a) `setTimeout` выполняет код один раз, `setInterval` – циклично',
                'b) `setTimeout` выполняется быстрее',
                'c) `setInterval` выполняется только после `setTimeout`',
                'd) Разницы нет',
            ],
        ],
        'hard' => [
            '1. Что такое замыкание в JavaScript?' => [
                'a) Функция, имеющая доступ к переменным из внешнего окружения',
                'b) Функция, вызываемая асинхронно',
                'c) Функция, которая может изменять `this`',
                'd) Функция, работающая только в строгом режиме',
            ],
            '2. Что делает `bind()`?' => [
                'a) Создает новую функцию с привязанным контекстом',
                'b) Вызывает функцию немедленно',
                'c) Изменяет параметры функции',
                'd) Удаляет контекст функции',
            ],
            '3. Какой результат выполнения `console.log(typeof null);`?' => [
                'a) "null"',
                'b) "undefined"',
                'c) "object"',
                'd) "function"',
            ],
            '4. Что делает `setImmediate()`?' => [
                'a) Выполняет код немедленно после текущего цикла событий',
                'b) Запускает функцию через некоторое время',
                'c) Останавливает выполнение кода',
                'd) Нет такого метода в JavaScript',
            ],
            '5. Как создать генератор в JavaScript?' => [
                'a) Использовать `function*`',
                'b) Использовать `async function`',
                'c) Использовать `=>`',
                'd) Использовать `yield function`',
            ],
            '6. Что делает оператор `new`?' => [
                'a) Создает новый объект',
                'b) Определяет новую функцию',
                'c) Создает переменную',
                'd) Вызывает метод объекта',
            ],
            '7. Как отменить выполнение `setTimeout`?' => [
                'a) clearTimeout()',
                'b) stopTimeout()',
                'c) cancelTimeout()',
                'd) removeTimeout()',
            ],
            '8. Что делает `Function.prototype.toString()`?' => [
                'a) Возвращает строковое представление функции',
                'b) Выполняет функцию как строку',
                'c) Преобразует результат функции в строку',
                'd) Преобразует `this` в строку',
            ],
            '9. Какой метод позволяет планировать выполнение функции перед перерисовкой браузера?' => [
                'a) requestAnimationFrame',
                'b) setInterval',
                'c) nextFrame',
                'd) scheduleUpdate',
            ],
            '10. Какой результат у `console.log(1 + "1");`?' => [
                'a) "11"',
                'b) 2',
                'c) 1',
                'd) NaN',
            ],
        ],
    ];
    
    $correctAnswers = [
        'easy' => [
            '1' => 'b',
            '2' => 'a',
            '3' => 'a',
            '4' => 'a',
            '5' => 'c',
            '6' => 'b',
            '7' => 'b',
            '8' => 'a',
            '9' => 'a',
            '10' => 'b',
        ],
        'medium' => [
            '1' => 'a',
            '2' => 'a',
            '3' => 'a',
            '4' => 'a',
            '5' => 'd',
            '6' => 'd',
            '7' => 'a',
            '8' => 'a',
            '9' => 'c',
            '10' => 'a',
        ],
        'hard' => [
            '1' => 'a',
            '2' => 'a',
            '3' => 'c',
            '4' => 'a',
            '5' => 'a',
            '6' => 'a',
            '7' => 'a',
            '8' => 'a',
            '9' => 'a',
            '10' => 'a',
        ],
    ];
?>