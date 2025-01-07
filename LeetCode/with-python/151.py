 def reverseWords(s):
        wa = s.split()
        wa.reverse()
        return " ".join(wa)

reverseWords("the name of my country")