import sqlite3

def get_connection():
    return sqlite3.connect('test.sqlite')

class StoreException(Exception):
    def __init__(self, message, *errors):
        Exception.__init__(self, message)
        self.errors = errors


# domains
class User():
    def __init__(self, name):
        self.name = name


class Animal():
    def __init__(self, name):
        self.name = name


# base store class
class Store():
    def __init__(self):
        try:
            self.conn = get_connection()
        except Exception as e:
            raise StoreException(*e.args, **e.kwargs)
        self._complete = False

    def __enter__(self):
        return self

    def __exit__(self, type_, value, traceback):
        # can test for type and handle different situations
        self.close()

    def complete(self):
        self._complete = True

    def close(self):
        if self.conn:
            try:
                if self._complete:
                    self.conn.commit()
                else:
                    self.conn.rollback()
            except Exception as e:
                raise StoreException(*e.args)
            finally:
                try:
                    self.conn.close()
                except Exception as e:
                    raise StoreException(*e.args)


# store for User obejcts
class UserStore(Store):

    def add_user(self, user):
        try:
            c = self.conn.cursor()
            # this needs an appropriate table
            c.execute('INSERT INTO user (name) VALUES(?)', (user.name,))
        except Exception as e:
            raise StoreException('error storing user')


# store for Animal obects
class AnimalStore(Store):

    def add_animal(self, animal):
        try:
            c = self.conn.cursor()
            # this needs an appropriate table
            c.execute('INSERT INTO animal (name) VALUES(?)', (animal.name,))
        except Exception as e:
            raise StoreException('error storing animal')

# do something
try:
    with UserStore() as user_store:
        user_store.add_user(User('John'))
        user_store.complete()

    with AnimalStore() as animal_store:
        animal_store.add_animal(Animal('Dog'))
        animal_store.add_animal(Animal('Pig'))
        animal_store.add_animal(Animal('Cat'))
        animal_store.add_animal(Animal('Wolf'))
        animal_store.complete()
except StoreException as e:
    # exception handling here
    print(e)