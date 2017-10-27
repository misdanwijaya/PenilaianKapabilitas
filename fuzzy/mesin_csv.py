#!/usr/bin/python
#################################
# Author : Misdan Wijaya
# Deskripsi : Mesin untuk memproses fuzzy dari file CSV dengan memilih area proses
#################################
import csv
import numpy as np
import skfuzzy as fuzz1
from skfuzzy import control as fuzz
import matplotlib.pyplot as plt
import time

#################################
# Input
#read file
def readMyFile(filename):
    id = []
 
    with open(filename) as csvDataFile:
        csvReader = csv.reader(csvDataFile)
        for row in csvReader:
            id.append(row[0])
            #area_proses.append(row[1])
 
    return id

id = readMyFile('C:/xampp_2/htdocs/SkripsiV2/fuzzy/download.csv')
print(id)

#check data
def PA_exists(PA):
    reader = csv.reader(open("C:/xampp_2/htdocs/SkripsiV2/fuzzy/upload.csv", "rb"), delimiter=' ', quotechar='|', quoting=csv.QUOTE_MINIMAL)
    for row in reader:
        if (row == PA):
            return True
    return False

#write data
def add_upload(id_temp, area_proses_temp, sg1_temp, sg2_temp, sg3_temp, avg_temp, fuzzy_temp):
    PA = [id_temp, area_proses_temp, sg1_temp, sg2_temp, sg3_temp, avg_temp, fuzzy_temp]
    if PA_exists(PA):
        return False

    writer = csv.writer(open("C:/xampp_2/htdocs/SkripsiV2/fuzzy/upload.csv", "ab"), delimiter=',', quotechar=',', quoting=csv.QUOTE_MINIMAL)
    writer.writerow(PA)
    return True

#################################################
#Fuzzy 
# New Antecedent/Consequent objects hold universe variables and membership functions
def hitung_fuzzy(number2, number3, number4):
    sg1 = fuzz.Antecedent(np.arange(0, 5, 1), 'sg1')
    sg2 = fuzz.Antecedent(np.arange(0, 5, 1), 'sg2')
    sg3 = fuzz.Antecedent(np.arange(0, 5, 1), 'sg3')

    karakteristik = fuzz.Consequent(np.arange(0, 5, 1), 'karakteristik')

    # Custom membership functions can be built interactively with a familiar, Pythonic API
    sg1['ny'] = fuzz1.trimf(sg1.universe, [0, 0, 1])
    sg1['ni'] = fuzz1.trimf(sg1.universe, [0, 1, 2])
    sg1['pi'] = fuzz1.trimf(sg1.universe, [1, 2, 3])
    sg1['li'] = fuzz1.trimf(sg1.universe, [2, 3, 4])
    sg1['fi'] = fuzz1.trimf(sg1.universe, [3, 4, 4])

    sg2['ny'] = fuzz1.trimf(sg2.universe, [0, 0, 1])
    sg2['ni'] = fuzz1.trimf(sg2.universe, [0, 1, 2])
    sg2['pi'] = fuzz1.trimf(sg2.universe, [1, 2, 3])
    sg2['li'] = fuzz1.trimf(sg2.universe, [2, 3, 4])
    sg2['fi'] = fuzz1.trimf(sg2.universe, [3, 4, 4])

    sg3['ny'] = fuzz1.trimf(sg3.universe, [0, 0, 1])
    sg3['ni'] = fuzz1.trimf(sg3.universe, [0, 1, 2])
    sg3['pi'] = fuzz1.trimf(sg3.universe, [1, 2, 3])
    sg3['li'] = fuzz1.trimf(sg3.universe, [2, 3, 4])
    sg3['fi'] = fuzz1.trimf(sg3.universe, [3, 4, 4])

    karakteristik['ny'] = fuzz1.trimf(karakteristik.universe, [0, 0, 1])
    karakteristik['ni'] = fuzz1.trimf(karakteristik.universe, [0, 1, 2])
    karakteristik['pi'] = fuzz1.trimf(karakteristik.universe, [1, 2, 3])
    karakteristik['li'] = fuzz1.trimf(karakteristik.universe, [2, 3, 4])
    karakteristik['fi'] = fuzz1.trimf(karakteristik.universe, [3, 4, 4])

    #3 masukan
    rule1 = fuzz.Rule(sg1['ny'] & sg2['ny'] & sg3['ny'], karakteristik['ny'])
    rule2 = fuzz.Rule(sg1['ni'] & sg2['ny'] & sg3['ny'], karakteristik['ni'])
    rule3 = fuzz.Rule(sg1['ny'] & sg2['ni'] & sg3['ny'], karakteristik['ni'])
    rule4 = fuzz.Rule(sg1['ny'] & sg2['ny'] & sg3['ni'], karakteristik['ni'])
    rule5 = fuzz.Rule(sg1['ni'] & sg2['ni'] & sg3['ny'], karakteristik['ni'])
    rule6 = fuzz.Rule(sg1['ni'] & sg2['ny'] & sg3['ni'], karakteristik['ni'])
    rule7 = fuzz.Rule(sg1['ny'] & sg2['ni'] & sg3['ni'], karakteristik['ni'])
    rule8 = fuzz.Rule(sg1['ni'] & sg2['ni'] & sg3['ni'], karakteristik['ni'])
    rule9 = fuzz.Rule(sg1['pi'] & sg2['ny'] & sg3['ny'], karakteristik['pi'])
    rule10 = fuzz.Rule(sg1['ny'] & sg2['pi'] & sg3['ny'], karakteristik['pi'])
    rule11 = fuzz.Rule(sg1['ny'] & sg2['ny'] & sg3['pi'], karakteristik['pi'])
    rule12 = fuzz.Rule(sg1['pi'] & sg2['pi'] & sg3['ny'], karakteristik['pi'])
    rule13 = fuzz.Rule(sg1['pi'] & sg2['ny'] & sg3['pi'], karakteristik['pi'])
    rule14 = fuzz.Rule(sg1['ny'] & sg2['pi'] & sg3['pi'], karakteristik['pi'])
    rule15 = fuzz.Rule(sg1['pi'] & sg2['ni'] & sg3['ni'], karakteristik['pi'])
    rule16 = fuzz.Rule(sg1['ni'] & sg2['pi'] & sg3['ni'], karakteristik['pi'])
    rule17 = fuzz.Rule(sg1['ni'] & sg2['ni'] & sg3['pi'], karakteristik['pi'])
    rule18 = fuzz.Rule(sg1['pi'] & sg2['pi'] & sg3['ni'], karakteristik['pi'])
    rule19 = fuzz.Rule(sg1['pi'] & sg2['ni'] & sg3['pi'], karakteristik['pi'])
    rule20 = fuzz.Rule(sg1['ni'] & sg2['pi'] & sg3['pi'], karakteristik['pi'])
    rule21 = fuzz.Rule(sg1['pi'] & sg2['ny'] & sg3['ni'], karakteristik['pi'])
    rule22 = fuzz.Rule(sg1['pi'] & sg2['ni'] & sg3['ny'], karakteristik['pi'])
    rule23 = fuzz.Rule(sg1['ny'] & sg2['pi'] & sg3['ni'], karakteristik['pi'])
    rule24 = fuzz.Rule(sg1['ni'] & sg2['pi'] & sg3['ny'], karakteristik['pi'])
    rule25 = fuzz.Rule(sg1['ny'] & sg2['ni'] & sg3['pi'], karakteristik['pi'])
    rule26 = fuzz.Rule(sg1['ni'] & sg2['ny'] & sg3['pi'], karakteristik['pi'])
    rule27 = fuzz.Rule(sg1['pi'] & sg2['pi'] & sg3['pi'], karakteristik['pi'])
    rule28 = fuzz.Rule(sg1['li'] & sg2['ny'] & sg3['ny'], karakteristik['li'])
    rule29 = fuzz.Rule(sg1['ny'] & sg2['li'] & sg3['ny'], karakteristik['li'])
    rule30 = fuzz.Rule(sg1['ny'] & sg2['ny'] & sg3['li'], karakteristik['li'])
    rule31 = fuzz.Rule(sg1['li'] & sg2['li'] & sg3['ny'], karakteristik['li'])
    rule32 = fuzz.Rule(sg1['li'] & sg2['ny'] & sg3['li'], karakteristik['li'])
    rule33 = fuzz.Rule(sg1['ny'] & sg2['li'] & sg3['li'], karakteristik['li'])
    rule34 = fuzz.Rule(sg1['li'] & sg2['fi'] & sg3['fi'], karakteristik['li'])
    rule35 = fuzz.Rule(sg1['fi'] & sg2['li'] & sg3['fi'], karakteristik['li'])
    rule36 = fuzz.Rule(sg1['fi'] & sg2['fi'] & sg3['li'], karakteristik['li'])
    rule37 = fuzz.Rule(sg1['li'] & sg2['li'] & sg3['fi'], karakteristik['li'])
    rule38 = fuzz.Rule(sg1['li'] & sg2['fi'] & sg3['li'], karakteristik['li'])
    rule39 = fuzz.Rule(sg1['fi'] & sg2['li'] & sg3['li'], karakteristik['li'])
    rule40 = fuzz.Rule(sg1['li'] & sg2['ny'] & sg3['fi'], karakteristik['li'])
    rule41 = fuzz.Rule(sg1['ny'] & sg2['li'] & sg3['fi'], karakteristik['li'])
    rule42 = fuzz.Rule(sg1['fi'] & sg2['li'] & sg3['ny'], karakteristik['li'])
    rule43 = fuzz.Rule(sg1['fi'] & sg2['ny'] & sg3['li'], karakteristik['li'])
    rule44 = fuzz.Rule(sg1['ny'] & sg2['fi'] & sg3['li'], karakteristik['li'])
    rule45 = fuzz.Rule(sg1['li'] & sg2['li'] & sg3['li'], karakteristik['li'])
    rule46 = fuzz.Rule(sg1['fi'] & sg2['ny'] & sg3['ny'], karakteristik['fi'])
    rule47 = fuzz.Rule(sg1['ny'] & sg2['fi'] & sg3['ny'], karakteristik['fi'])
    rule48 = fuzz.Rule(sg1['ny'] & sg2['ny'] & sg3['fi'], karakteristik['fi'])
    rule49 = fuzz.Rule(sg1['fi'] & sg2['fi'] & sg3['ny'], karakteristik['fi'])
    rule50 = fuzz.Rule(sg1['fi'] & sg2['ny'] & sg3['fi'], karakteristik['fi'])
    rule51 = fuzz.Rule(sg1['ny'] & sg2['fi'] & sg3['fi'], karakteristik['fi'])
    rule52 = fuzz.Rule(sg1['fi'] & sg2['fi'] & sg3['fi'], karakteristik['fi'])

    #2 masukan
    rule53 = fuzz.Rule(sg1['ny'] & sg2['ny'], karakteristik['ny'])
    rule54 = fuzz.Rule(sg1['ni'] & sg2['ny'], karakteristik['ni'])
    rule55 = fuzz.Rule(sg1['ny'] & sg2['ni'], karakteristik['ni'])
    rule56 = fuzz.Rule(sg1['ni'] & sg2['ni'], karakteristik['ni'])
    rule57 = fuzz.Rule(sg1['pi'] & sg2['ny'], karakteristik['pi'])
    rule58 = fuzz.Rule(sg1['ny'] & sg2['pi'], karakteristik['pi'])
    rule59 = fuzz.Rule(sg1['pi'] & sg2['ni'], karakteristik['pi'])
    rule60 = fuzz.Rule(sg1['ni'] & sg2['pi'], karakteristik['pi'])
    rule61 = fuzz.Rule(sg1['pi'] & sg2['pi'], karakteristik['pi'])
    rule62 = fuzz.Rule(sg1['li'] & sg2['fi'], karakteristik['li'])
    rule63 = fuzz.Rule(sg1['fi'] & sg2['li'], karakteristik['li'])
    rule64 = fuzz.Rule(sg1['ny'] & sg2['li'], karakteristik['li'])
    rule65 = fuzz.Rule(sg1['li'] & sg2['ny'], karakteristik['li'])
    rule66 = fuzz.Rule(sg1['li'] & sg2['li'], karakteristik['li'])
    rule67 = fuzz.Rule(sg1['ny'] & sg2['fi'], karakteristik['fi'])
    rule68 = fuzz.Rule(sg1['fi'] & sg2['ny'], karakteristik['fi'])
    rule69 = fuzz.Rule(sg1['fi'] & sg2['fi'], karakteristik['fi'])

    #1 masukan
    rule70 = fuzz.Rule(sg1['ny'], karakteristik['ny'])
    rule71 = fuzz.Rule(sg1['ni'], karakteristik['ni'])
    rule72 = fuzz.Rule(sg1['pi'], karakteristik['pi'])
    rule73 = fuzz.Rule(sg1['li'], karakteristik['li'])
    rule74 = fuzz.Rule(sg1['fi'], karakteristik['fi'])

    # Create a new ControlSystem with these rules added
    # Note: it is possible to create an empty ControlSystem() and build it up interactively.
    tipping_ctrl = fuzz.ControlSystem([rule1, rule2, rule3, rule4, rule5, rule6, rule7, rule8, rule9, rule10, rule11, rule12, rule13, rule14, rule15, rule16, rule17, rule18, rule19, rule20, rule21, rule22, rule23, rule24, rule25, rule26, rule27, rule28, rule29, rule30, rule31, rule32, rule33, rule34, rule35, rule36, rule37, rule38, rule39, rule40, rule41, rule42, rule43, rule44, rule45, rule46, rule47, rule48, rule49, rule50, rule51, rule52, rule53, rule54, rule55, rule56, rule57, rule58, rule59, rule60, rule61, rule62, rule63, rule64, rule65, rule66, rule67, rule68, rule69, rule70, rule71, rule72, rule73, rule74])

    tipping = fuzz.ControlSystemSimulation(tipping_ctrl)

    # Pass inputs to the ControlSystem using Antecedent labels with Pythonic API
    # Note: if you like passing many inputs all at once, use .inputs(dict_of_data)
    tipping.input['sg1'] = float(number2)
    tipping.input['sg2'] = float(number3)
    tipping.input['sg3'] = float(number4)

    # Crunch the numbers
    tipping.compute()

    # Output available as a dict, for arbitrary number of consequents
    #tipping.print_state()
    print tipping.output

    #masukan fuzzy
    o = tipping.output
    x = list(o.values())
    return x

###############################################################
#search process area
#input number you want to search
start_time = time.time()

number = raw_input('Masukan ID Spesific Goal\n')
#read csv, and split on "," the line
csv_file = csv.reader(open('C:/xampp_2/htdocs/SkripsiV2/fuzzy/download.csv', "rb"), delimiter=",")

#loop through csv list
for row in csv_file:
    #if current rows 1nd value is equal to input, print that row
    if number == row[0]:
    #masukan data
        print (row[1],row[2],row[3],row[4])
        number1 = row[1]
        number2 = row[2]
        number3 = row[3]
        number4 = row[4]
        number5 = row[5]

z = hitung_fuzzy(number2,number3,number4)
fuzzy_temp2 = z[0]
add_upload(number, number1, number2, number3, number4, number5, fuzzy_temp2)

print ("--------------------------------\n")
print ("Waktu proses adalah :\n")
print("%s detik\n" % (time.time() - start_time))
print ("--------------------------------\n")
raw_input("Tekan enter untuk keluar")