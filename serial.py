#!/usr/bin/python
import serial

porta = input
porta     = '/dev/ttyACM0'
baud_rate = 9600
arduino   = serial.Serial(porta, baud_rate)
