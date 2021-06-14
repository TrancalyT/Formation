function tableMulti (value)
{
    for(i = 1; i < 11; i++){
        console.log(value + " x " + i + " = " + (value * i));
    }
}

for (j = 1; j < 11; j++){
    tableMulti(j);
}
