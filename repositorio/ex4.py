lista=[]
atual=input()
while(atual!="fim"):
    lista.append(int(atual))
    atual=input()
lista=sorted(lista);
media=(sum(lista))/len(lista)
if((len(lista)%2)==1):
    mediana=lista[(len(lista)//2)]
else:
    mediana=((lista[(len(lista)//2)])+(lista[(len(lista)//2)-1]))/2
print("Média: "+str(media)+" Mediana: "+str(mediana))
