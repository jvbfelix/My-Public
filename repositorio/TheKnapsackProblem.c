#include <stdio.h>

typedef struct{
	int peso;
	int valor;
}item;

int moc[2001][2001];
int S,N,c=1;
item t;

int main(){
	int p,v,nn,i,j;
	scanf(" %d %d",&S,&N);
	nn=N;
	for(i=0;i<2001;i++){
		for(j=0;j<2001;j++){
			moc[i][j]=0;
		}
	}
	while(nn){
		scanf(" %d %d",&p,&v);
		t.peso=p;
		t.valor=v;
		PD();
		nn--;
	}
	printf("%d",moc[c-1][S]);
}
void PD(){
	int i;
	for(i=0;i<=S;i++){
		moc[c][i]=moc[c-1][i];
	}
	for(i=(t.peso);i<=S;i++){
		if(moc[c][i]<(moc[c-1][i-(t.peso)]+t.valor)){
			moc[c][i]=(moc[c-1][i-(t.peso)]+t.valor);
		}
	}
	c++;
}