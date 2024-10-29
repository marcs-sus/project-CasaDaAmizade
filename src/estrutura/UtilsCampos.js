class UtilsCampos {
    static getCampo(sId) {
        const oCampo = document.getElementById(sId);
        
        if (oCampo) {
            return {
                elemento: oCampo,
                getValor() {
                    return oCampo.value;                
                },
                setValor(sValor) {
                    oCampo.value = sValor;
                }
            };
        }
        return null;
    }
}

