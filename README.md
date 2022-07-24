# FeedMonkeyProblem

Problem:
You work in a zoo and your job is feeding monkeys with Bananas and Apples. The zoo has an unlimited 
number of identical Monkeys, and each monkey can eat any number of Bananas and Apples at a time. 
You are given Bananas and Apples and need to distribute them among the monkeys. You want to feed 
as many monkeys as possible. However, the monkeys do not like to eat exactly the same amount of food 
as the other monkeys, which means NO two monkeys will eat the same amount of Bananas and Apples 
at a time. All bananas and apples should be distributed.
What is the largest number of monkeys that you can feed by given number of Bananas and Apples? 
Example, 
If you have 2 Bananas and 0 Apples, the only possible strategy is to give both Bananas to one monkey. 
If you have 4 Bananas and 5 Apples, one optimal strategy is to have: 
 Monkey A with 1 Banana 
 Monkey B with 2 Bananas 
 Monkey C with 1 Apple 
 Monkey D with 2 Apple 
 Monkey E with 1 Banana and 2 Apples 
You need to write a function that takes two parameters, number of Bananas and Apples, and returns the 
largest number of monkeys that can be fed. 
If you find this problem too difficult, you can limit bananas and apples to no more than 5.


Idea:
use the number of bananas and apples as col and row of 2d array, fill the array with False, when go through the 2d array, each time when it reaches, turn into True.