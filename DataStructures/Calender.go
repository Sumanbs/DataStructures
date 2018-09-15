package DataStructures

import (
	"fmt"
	"math"
)

//check day
func day(month int32, day int32, year int32) int32 {
	yea := float64(year)
	mon := float64(month)
	da := float64(day)
	y := yea - math.Floor((14-mon)/12)
	x := y + math.Floor(y/4) - math.Floor(y/100) + math.Floor(y/400)
	m := mon + 12*math.Floor((14-mon)/12) - 2
	d := (int32)(da+x+math.Floor((31*m)/12)) % 7
	return (d)
}

//checking for Leap year
func isLeapYear(year int32) bool {

	if (year%4 == 0) && (year%100 != 0) {
		return true
	}
	if year%400 == 0 {

		return true
	}
	return false
}

//take input from user
func GetInput() {
	fmt.Println("Enter the month : ")
	var month int32
	fmt.Scanf("%d", &month)

	fmt.Println("Enter the Year : ")
	var year int32
	fmt.Scanf("%d", &year)

	months := []string{"", "January", "February", "March", "April", "May",
		"June", "July", "August", "September", "October", "November", "December"}
	days := []int32{0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31}
	if month == 2 && isLeapYear(year) {
		days[month] = 29
	}
	fmt.Println(months[month], year)
	fmt.Println(" Su  Mo  Tu  We  Th  Fr  Sa")
	var d, i, j int32
	d = day(month, 1, year)

	for i = 0; i < d; i++ {
		fmt.Print("    ")
	}
	for j = 1; j <= days[month]; j++ {
		fmt.Printf("%2d  ", j)
		if ((j+d)%7 == 0) || (j == days[month]) {
			fmt.Println()
		}
	}
}
