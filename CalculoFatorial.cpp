// factorial.cpp

#include <iostream>

int factorial(int n) {
    if (n <= 1) return 1;
    return n * factorial(n - 1);
}

int main() {
    int number;
    std::cout << "Digite um número para calcular o fatorial: ";
    std::cin >> number;

    if (number < 0) {
        std::cout << "Fatorial não definido para números negativos." << std::endl;
    } else {
        std::cout << "Fatorial de " << number << " é " << factorial(number) << std::endl;
    }

    return 0;
}
