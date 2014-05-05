<?php

/*
定义和用法
checkdate() 函数验证一个格里高里日期。
如果指定的值合法，则该函数返回 true，否则返回 false。
日期在下列情况下为合法：
month 介于且包括 1 - 12
Day 的值在给定的 month 所应该具有的天数范围之内，闰年已经考虑进去了。
year 介于且包括 1 到 32767
语法
checkdate(month,day,year)
参数 描述
month 必需。规定月。
day 必需。规定日。
year 必需。规定年。
例子
*/
var_dump(checkdate(12,31,2000));
var_dump(checkdate(2,29,2003));
var_dump(checkdate(2,29,2004));