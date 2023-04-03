    import java.util.StringTokenizer;  
     class token{  
     public static void main(String args[]){  
       StringTokenizer st = new StringTokenizer("my name is omar"," ");  
         while (st.hasMoreTokens()) {  
             System.out.println(st.nextToken());  
         }  
       }  
    }  
