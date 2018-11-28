const INITIAL_STATE = {
    nome: 'Matheus',
    email: 'matheus@teste.com.br',
    senha: 'coxinha123'
}

export default (state = INITIAL_STATE, action) => {
    if(action.type == 'modifica_email') {
        return { ...state, email: action.payload };
    }
    if(action.type == 'modifica_senha') {
        return { ...state, senha: action.payload }
    }
    return state;
}