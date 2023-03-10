1. 
Бинарный поиск работает за время О(log_2(n)), 
где n - это количество элементов. 


2. 
Логарифмическое время - О(log_2(n)), 
простое время - О(n)


3. 
Задача о коммивояжёре относится к классу NP-трудных задач. 
Что это значит, я не знаю. 
И что такое NP я тоже не разобрался.
NP-hard (NP-трудные) Класс задач, которые не менее сложны, чем самые сложные задачи в NP(NP-complete)
алгоритмов с полиномиальным временем для NP-трудных задач не существует, но это не доказано.
Задача коммивояжера — оптимизационная задача поиска циклического маршрута с наименьшей стоимостью через все узлы взвешенного графа(структура данных в дискретной математике).
Это NP-трудная задача, потому что правильного решения не существует, и каждое решение есть правильное.
NP-complete (NP-полные)Класс задач разрешимости, который содержит самые сложные проблемы в NP.

4. 
Насколько я понял, ассимптотическая сложность - это значение, 
к которому стремится функция О() при n стремящемся к 
бесконечности.
Асимптотическая сложность алгоритмов представляет собой время и память,
которые понадобятся программе в процессе работы.

5. 
Время выполнения алгоритма не измеряется в секундах, потому 
что при разном количестве элементов в множестве отношение 
времени выполнения разных алгоритмов меняется нелинейно 
(так как в основном О() функции алгоритмов имеют 
нелинейный вид - за исключением простого поиска). 
Также, возможно, потому что на разных устройствах время 
выполнения каждого шага алгоритма может быть разным. (в точку)

6. 
Время выполнения алгоритма измеряется в тактах (итерациях). 


7. 
Время выполнения алгоритма выражается в виде Big O notation. 
По которому мы оцениваем функцию, описывающую затраты времени.

Big O – это мера эффективности «в худшем случае»,
верхняя граница того, сколько времени потребуется для выполнения задачи,
или сколько памяти для этого необходимо.
Например, поиск элемента в несортированном списке имеет значение O(n).
Для получения результата, возможно, придется перебрать весь список.