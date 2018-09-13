package distanciaeuclidiana;

public class DistanciaEuclidiana {

    public static void main(String[] args) {
        double di, id;
        final int PXP, PYP;
        PXP = 120;
        PYP = 70;
        
        double[] pxi = {118, 131,128, 101, 101, 114, 109};
        double[] pyi = {48, 49, 78, 78, 62, 61, 51};
        int i = 0;
        
        while(i < 7 ){
            
            di = Math.sqrt((Math.pow(PXP - pxi[i], 2)) + (Math.pow(PYP - pyi[i], 2) ));
            System.out.println(id = 1/di);
            i++;
            
        }
    }
}
