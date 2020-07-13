'''
OOP : Object oriented programming
CLASS - CONTAINS BOTH VARIABLE AND FUNCTION. IT IS AN BLUE PRINT OR TEMPLATE FOR CREATING AN OBJECT.
OBJECT - A CLASS TYPE VARIABLE
ENCAPSULATION - THE WRAPPING OF THE DATA AND FUNCTIONS TO FORM A SINGLE UNIT IS CALLED CLASS.
ABSTRACTION - IT IS A PROCESS OF HIDING THE INTERNAL OR BACKGROUND DETAILS AND USING ONLY THE NECESSARY FUNCTIONALITY.
INHERITANCE - REUSABILITY OF A CODE IS CALLED INHERITANCE...
POLYMORPHISM - IT IS AN ABILITY TO TAKE MORE THAN ONE FORM
                THE ABILITY OF THE OBJECT TO RESPOND TO DIFFERENT FUNCTION CALLS
CONSTRUCTOR - IT IS USED TO INITIALIZE AN OBJECT AT THE TIME OF ITS CREATION. IT IS CALLED WHEN AN OBJECT IS CREATED.                '''

class student:
    roll=0
    name=''

    def input(self,r,n):
        self.roll=r
        self.name=n

    def show(self):
        print("ROLL",self.roll)
        print("NAME",self.name)

s=student()#s is the object of class student
s.input(1,'ABC')
s.show()
#===============INHERITANCE================


class p:
    def show(self):
        print("In parent class")

class c(p):#c is the child of p
    def display(self):
        print("In child class")

obj=c()#Object of class c
obj.show()
obj.display()
#==================CONSTRUCTOR===================


class a:
    def __init__(self):
        print("Constructor called...")


    def msg(self):
        print("In method msg...")


obj=a()#obj is the object of class a. Constructor is called here.
obj.msg()

#================================================

class q:
    def __init__(self):
        print("In parent class contructor...")

class r(q):#r is the child of q
    def dis(self):
        print("In chlid class...")

obj=r()
obj.dis()
