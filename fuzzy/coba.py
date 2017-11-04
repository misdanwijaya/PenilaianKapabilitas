import numpy as np
import skfuzzy as fuzz1
from skfuzzy import control as fuzz
import matplotlib.pyplot as plt

# New Antecedent/Consequent objects hold universe variables and membership functions

sg1 = fuzz.Antecedent(np.arange(0, 5, 1), 'sg1')
sg2 = fuzz.Antecedent(np.arange(0, 5, 1), 'sg2')
sg3 = fuzz.Antecedent(np.arange(0, 5, 1), 'sg3')

karakteristik = fuzz.Consequent(np.arange(0, 5, 1), 'karakteristik')

# Auto-membership function population is possible with .automf(3, 5, or 7)
#sg1.automf(5)
#sg2.automf(5)
#sg3.automf(5)

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
# You can see how these look with .view()
#quality['average'].view()
"""
sg1.view()
sg2.view()
sg3.view()
karakteristik.view()
"""

#masukan_sg1 = float(input("Masukan SG1: "))
#masukan_sg2 = float(input("Masukan SG2: "))
#masukan_sg3 = float(input("Masukan SG3: "))
#print("Your current gpa is %.2f " % gpa)


# Rule objects connect one or more antecedent membership functions with
# one or more consequent membership functions, using 'or' or 'and' to combine the antecedents.
#   * rule1: "If food is poor OR services is poor, then tip will be poor
#   * rule2: "If service is average, then tip will be average
#   * rule3: "If service is good OR food is good, then tip will be good

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

# View the whole system
#tipping_ctrl.view()

tipping = fuzz.ControlSystemSimulation(tipping_ctrl)

# Pass inputs to the ControlSystem using Antecedent labels with Pythonic API
# Note: if you like passing many inputs all at once, use .inputs(dict_of_data)
tipping.input['sg1'] = 3.60
tipping.input['sg2'] = 3.40
tipping.input['sg3'] = 3.30

# Crunch the numbers
tipping.compute()

# Output available as a dict, for arbitrary number of consequents
tipping.print_state()
print tipping.output
# Viewing the Consequent again after computation shows the calculated system
karakteristik.view(sim=tipping)
#quality.view(sim=tipping)

plt.show()