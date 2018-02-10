#include <cstdio>
#include <queue>
#include <vector>
#define max 100001

struct cid{
	int dist;//distancia
	int lig;//cidade a que se liga
};

bool operator <(cid a,cid b){
	return a.dist < b.dist;
}
using namespace std;
void dijk();

int n,m,ini,fim,tam,dis[max];//n cidades, m rodovias,ini cidade inicial, fim cidade final
vector <cid> est[max];
int main(){
	int test,i,j,k,l;//test numero de testes;i , j , k ,l auxiliares
	scanf(" %d",&test);
	while(test--){
		scanf(" %d %d %d %d",&n,&m,&ini,&fim);
		tam=0;
		for(i=1;i<=n;i++){
			est[i].clear();
			dis[i]=max;
		}
		dis[ini]=0;
		for(j=0;j<m;j++){
			scanf(" %d %d",&i,&k);
			scanf(" %d",&l);
			cid a,b;
			a.dist=l;
			b.dist=l;
			a.lig=k;
			b.lig=i;
			est[i].push_back(a);
			est[k].push_back(b);
		}
		dijk();
	}
	return 0;
}
void dijk(){
	priority_queue<cid> q;
	cid p,r;
	int k;
	p.dist=0;
	p.lig=ini;
	q.push(p);
	while(!(q.empty())){
		p=q.top();
		q.pop();
		k=est[p.lig].size();
		for(int i=0;i<k;i++){
            r=est[p.lig][i];
			if(dis[r.lig]>r.dist+dis[p.lig]){
				dis[r.lig]=r.dist+dis[p.lig];
				q.push(r);
			}
		}
	}
	if(dis[fim]==max){
		printf("NONE\n");
		return;
	}
	printf("%d\n",dis[fim]);
}