import java.util.*;
class q1{
	public static void main(String []args){
		List<String> a =new LinkedList<>();
		a.add("Appel");
		a.add("Age");
		a.add("Ahmed");
		
		List<String> b =new LinkedList<>();
		b.add("book");
		b.add("ball");
		b.add("bad");
		
		
		List<String> c =new LinkedList<>();
		c.add("car");
		c.add("cat");
		c.add("city");
		// Create a map that uses the alphabets as keys and a collection as values
		Map <String , List<String>> mp = new HashMap<>();
		
		//Develop and application that stores words into that collection.
		mp.put("a",a);
		mp.put("b",b);
		mp.put("c",c);
		
		List<String> aa =new LinkedList<>();
		aa.add("Appel2");
		aa.add("Age2");
		aa.add("Ahmed2");
		
		
		addList("a",a,aa,mp);
		//Elements in the words map for each alphabet should be sorted
		mp.forEach((key,value)->{
			Collections.sort(value);
			System.out.println("LinkedList (after sorting ): " + value) ;
		});
		
		//Provide methods to print all the letters and corresponding words
		mp.forEach((key,value)->{
			System.out.println("value of key "+key+" is") ;
			for(String i : value){
				System.out.print( i+" ") ;
			}
			System.out.println() ;
		});
		
		//Provide a method to print the words of a given letter
		List<String> listCollection = printCollection(mp,"b");
		System.out.println(listCollection) ;
	}
	
	public static void addList(String key,List<String> oldList,List<String> newList,Map <String , List<String>> mp2){
		
		newList.forEach((ele)->{
			oldList.add(ele);
		});
		mp2.put(key, oldList);
	}
	
	public static List<String> printCollection (Map <String , List<String>> mp2,String keyChar){
		List<String> res = new LinkedList<>();
		res = mp2.get(keyChar);
		
		return res;
	}
}
