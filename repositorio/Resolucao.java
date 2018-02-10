import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Scanner;

public class Resolucao {
    public static void main(String[] args) throws IOException {
        Scanner scanner = new Scanner(System.in);
        FileWriter saida = new FileWriter("Expressoes.out");//abre o arquivo a ser escrito
        int numTab=0;
        try {
            scanner = new Scanner(new FileReader("Expressoes.in")).useDelimiter("\\n");//abre o arquivo a ser lido
        } catch (FileNotFoundException e) {
            e.printStackTrace();
        }
        String numTest = scanner.nextLine();//lê o inicio, que não é relevante para o meu código
        while(scanner.hasNext()){//enquanto existir algo a ser lido
            numTab++;
            saida.write("caso #"+numTab+": ");//string com o caso que está sendo tratado
            Expre test = new Expre(scanner.nextLine());//cria o objeto com a string lida
            test.Final(saida);//printa o resultado
        }
        scanner.close();//fecha o arquivo de leitura
        saida.close();//fecha o arquivo de escrita
    }
    static class Expre{
        boolean fnc=true,horn=true,uni=false,sat=false;//fnc indica se está na fnc, horn indica se todas as cláusulas são de horn, uni indica se existem cláusulas unitárias, sat indica se é satisfatível
        String Expr;//expressão inicial
        ArrayList<String> Clausulas=new ArrayList<>();

        public Expre(String s){//construtor do objeto
            this.Expr=s;
        }
        private void verFNC(){//verifica se está na fnc
            int par=0;
            for(int i=0;i<Expr.length();i++){
                if(Expr.charAt(i)=='('){//inicio de uma cláusula
                    par++;
                    continue;
                }
                if(Expr.charAt(i)==')'){//fim de uma cláusula
                    par--;
                    continue;
                }
                if(Expr.charAt(i)=='.'&& par!=0){//caso exista um and que esteja dentro de uma cláusula, não está na fnc
                    fnc=false;
                    return;
                }
                if(par>1){//caso exista um não atômico dentro de uma cláusula, não está na fnc
                    fnc=false;
                    return;
                }
                if (par == 0 && Expr.charAt(i) != '.') {//caso o que liga as cláusulas não seja um and, não está na fnc
                    fnc=false;
                    return;
                }
            }
        }
        private void geraClausulas(){//separa as cláusulas para poder serem manipuladas
            int ini=0,fim=0;
            for(int i=0;i<Expr.length();i++){
                if(Expr.charAt(i)=='('){
                    ini=i;
                }
                if(Expr.charAt(i)==')'){
                    fim=i;
                }
                if(Expr.charAt(i)=='.'){
                    String s=Expr.substring(ini,fim+1);
                    Clausulas.add(s);
                }
            }
            String s=Expr.substring(ini,fim+1);
            Clausulas.add(s);
        }
        private void verHorn(){//verifica se as cláusulas são de horn
            for(int i=0;i<Clausulas.size();i++){//para cada cláuula
                int pos=0;
                String cla=Clausulas.get(i);
                for(int j=1;j<cla.length();j++){//se um atômico é encontrado, e ele não é negativo, conto como positivo
                    if((cla.charAt(j)=='a' || cla.charAt(j)=='b' || cla.charAt(j)=='c' || cla.charAt(j)=='d')&&cla.charAt(j-1)!='-'){
                        pos++;
                    }
                }
                if(pos>1){//caso tenha mais de um atômico positivo, esta cláusula não é de horn
                    horn=false;
                    return;
                }
            }
        }
        private void checaUnitarias(){//verifica se existem cláusulas unitárias
            for(int i=0;i<Clausulas.size();i++){
                if(Clausulas.get(i).length()<=4){
                    uni=true;
                }
            }
        }
        private void Sat(){//verifica se é satusfatível
            if(!uni){//Se exp não tem cláusulas unitárias, então exp é satisfatível
                sat=true;
                return;
            }
            for(int i=0;i<Clausulas.size();i++){//para todas as cláusulas
                for(int j=1;j<Clausulas.get(i).length()-1;j++){
                    if((Clausulas.get(i).charAt(j-1)!='-')&&(Clausulas.get(i).charAt(j)=='a'||Clausulas.get(i).charAt(j)=='b'||Clausulas.get(i).charAt(j)=='c'||Clausulas.get(i).charAt(j)=='d')){
                        char pos=Clausulas.get(i).charAt(j);//verifica até encontrar um unitário positivo
                        for(int k=0;k<Clausulas.size();k++){//não compara uma cláusula com ela mesma
                            if(k==i){
                                continue;
                            }
                            for(int l=1;l<Clausulas.get(k).length();l++){//gera as cláusulas para todas as combinaçõe entre uma que tenha o atômico positivo e as demais com este negativo
                                if(Clausulas.get(k).charAt(l-1)=='-'&& Clausulas.get(k).charAt(l)==pos){
                                    String s=Clausulas.get(i),r=Clausulas.get(k),temp;
                                    if(j>1){
                                        temp=s.substring(0,j);
                                    }else{
                                        temp="(";
                                    }
                                    if(j+2<Clausulas.get(i).length()){
                                        s=temp+s.substring(j+2,Clausulas.get(i).length());
                                    }else{
                                        s=temp+")";
                                    }
                                    if(l>2){
                                        temp=r.substring(0,l-2);
                                    }else{
                                        temp="(";
                                    }
                                    if(l+2<r.length()){
                                        r=temp+r.substring(l+2,r.length());
                                    }else{
                                        r=temp+")";
                                    }
                                    s=s.substring(0,s.length()-1);
                                    r=r.substring(1,r.length());
                                    if(r.length()>1){
                                        if (r.charAt(r.length() - 1) != ')') {
                                            r=r.substring(0,r.length()-1)+")";
                                        }
                                    }
                                    String res;
                                    if(s.length()==1 && r.length()==1){//caso seja um cláusula vazia, é insatisfatível
                                        sat=false;
                                        return;
                                    }
                                    else if(s.length()==1){
                                        res="("+r;
                                    }else if(r.length()==1){
                                        res=s+")";
                                    }else{
                                        res=s+"+"+r;
                                    }//até aqui, trato todos os possíveis casos do posicionamento das cláusulas
                                    int fim=res.length()-1;
                                    for(int p=res.length()-1;p>0;p--){//caso o final não seja um atômico, deve ser um parênte
                                        if(res.charAt(p)!='a'&&res.charAt(p)!='b'&& res.charAt(p)!='c' && res.charAt(p)!='d'){
                                            fim=p;
                                        }else{//caso seja um atômico, concateno com o parêntes
                                            fim=p+1;
                                            res=res.substring(0,fim)+")";
                                            break;
                                        }
                                    }

                                    res=simplifica(res);//retiro os termos repitidos
                                    if(Clausulas.indexOf(res)==-1){//caso o termo anda não tenha sido gerado, adiciono
                                        Clausulas.add(res);
                                    }
                                }
                            }
                        }
                        break;
                    }
                }
            }
            sat=true;//caso não tenha sido encontrada uma cláusula vazia em todas as combinações, é satisfatível
            return;
        }
        private void simplificaAll(){//tira os termos repetidos de todas as cláusulas
            ArrayList<String> temp=new ArrayList<>();
            for(int i=0;i<Clausulas.size();i++){
                String s=Clausulas.get(i);
                s=simplifica(s);
                temp.add(s);
            }
            Clausulas=temp;
        }
        private String simplifica(String s){//retira os termos repetidos
            boolean ap=false,bp=false,cp=false,dp=false,an=false,bn=false,cn=false,dn=false;//caso cada um destes seja encotrado, é adicionado na expressão equivalente
            for(int j=1;j<s.length();j++){
                if(s.charAt(j)=='a'){
                    if(s.charAt(j-1)=='-'){
                        an=true;
                    }
                    else{
                        ap=true;
                    }
                }
                if(s.charAt(j)=='b'){
                    if(s.charAt(j-1)=='-'){
                        bn=true;
                    }
                    else{
                        bp=true;
                    }
                }
                if(s.charAt(j)=='c'){
                    if(s.charAt(j-1)=='-'){
                        cn=true;
                    }
                    else{
                        cp=true;
                    }
                }
                if(s.charAt(j)=='d'){
                    if(s.charAt(j-1)=='-'){
                        dn=true;
                    }
                    else{
                        dp=true;
                    }
                }
            }
            s="";
            if(ap){
                s=s+"a+";
            }
            if(an){
                s=s+"-a+";
            }
            if(bp){
                s=s+"b+";
            }
            if(bn){
                s=s+"-b+";
            }
            if(cp){
                s=s+"c+";
            }
            if(cn){
                s=s+"-c+";
            }
            if(dp){
                s=s+"d+";
            }
            if(dn){
                s=s+"-d+";
            }
            if(s.length()>1){//como os termos são concatenados com o '+', corto, e concateno com o parêntes
                s=s.substring(0,s.length()-1);
                s="("+s+")";
            }
            return s;
        }
        private void sort(){//ordena os termos, para que o método sat comce pelos atômicos
            ArrayList<String> temp=new ArrayList<>();
            while(!(Clausulas.isEmpty())){
                String s=Clausulas.get(0);
                for(int i=1;i<Clausulas.size();i++){
                    if(s.length()>Clausulas.get(i).length()){
                        s=Clausulas.get(i);
                    }
                }
                temp.add(s);
                Clausulas.remove(s);
            }
            Clausulas=temp;
        }
        public void Final(FileWriter saida) throws IOException {//gera a saida sobre a expressão
            verFNC();
            if(!fnc){//caso não esteja na fnc, informo e paro
                saida.write("nao esta na FNC");
                saida.append(System.getProperty("line.separator"));
                return;
            }
            geraClausulas();
            verHorn();
            if(!horn){//caso as cláusulas não sejam de horn, informo e paro
                saida.write("nem todas as clausulas sao de horn");
                saida.append(System.getProperty("line.separator"));
                return;
            }
            checaUnitarias();
            simplificaAll();
            sort();
            Sat();
            if(sat){//caso seja satisfatível
                saida.write("satisfativel");
                saida.append(System.getProperty("line.separator"));
                return;
            }
            saida.write("insatisfativel");//caso não seja satisfatível
            saida.append(System.getProperty("line.separator"));
            return;
        }
    }
}