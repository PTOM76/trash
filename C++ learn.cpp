#include <iostream>

using namespace std;

class Person {
    private:
        int money = 10000;
        string name = "未設定";
    public:
        int getMoney() {
            return money;
        }

        void setMoney(int money) {
            this -> money = money;
            return;
        }

        string getName() {
            return name;
        }

        void setName(string name) {
            this -> name = name;
            return;
        }

        int* getMoneyPointer() {
            int* moneyPtr = &money;
            return moneyPtr;
        }

        Person() {
            cout << this -> name + "は生まれたお！" << endl;
        }

        ~Person() {
            cout << this -> name + "は消滅したお！" << endl;
        }
};

int main()
{
    Person person;
    person.setMoney(5000);
    cout << "名前を教えやがれください。" << endl;
    string name;
    cin >> name;
    person.setName(name);
    cout << person.getMoney() << endl;
    return 0;
}
