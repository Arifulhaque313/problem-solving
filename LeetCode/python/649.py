def predictPartyVictory(senate):
    n = len(senate)
    radiant = []
    dire = []

    for i, senate in enumerate(senate):
        if senate == 'R':
            radiant.append(i)
        else:
            dire.append(i)

    while radiant and dire:
        r_index = radiant.pop(0)
        d_index = dire.pop(0)

        if r_index < d_index:
            radiant.append(r_index + n)
        else:
            dire.append(d_index + n)
        

    return "Radiant" if radiant else "Dire"

print(predictPartyVictory("RD"))