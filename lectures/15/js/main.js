var account =
{
    AccountTitle: "Fareed Murtaza",
    AvailableBalance: 10000,
    AccountCurrency: "PKRS",
    IBAN: "PKN123456789",
    DepositeAmmount: function(e, v)
    {
        if(e.keyCode==13)
        {
            if(!isNaN(v))
            {
                account.AvailableBalance=account.AvailableBalance+parseInt(v);
                document.getElementById("balance").innerHTML = account.AvailableBalance;
                document.getElementById("deposit").value = "";
                document.getElementById("deposit-msg").innerHTML = "";
                // show detail in box
                TransactionHistory(v, "Deposite");
            }
            else
            {
                document.getElementById("deposit-msg").innerHTML = "Enter Valid amount";
                document.getElementById("deposit").value = "";
            }
        }
    },
    CheckWithdrawAmmount: function(e, v)
    {
        if(e.keyCode==13)
        {
            if(!isNaN(v))
            {
                if (v <= account.AvailableBalance)
                {
                    account.AvailableBalance=account.AvailableBalance-parseInt(v);
                    document.getElementById("balance").innerHTML = account.AvailableBalance;
                    document.getElementById("withdraw").value = "";
                    document.getElementById("withdraw-msg").innerHTML = "";
                    // show detail in box

                    TransactionHistory(v, "With-Draw");
                }
                else
                {
                    document.getElementById("withdraw-msg").innerHTML = "Don't have suffient amount in account";
                    document.getElementById("withdraw").value = "";
                }
            }
            else
            {
                document.getElementById("withdraw-msg").innerHTML = "Enter Valid amount";
                document.getElementById("withdraw").value = "";
            }
        }
    }
};

document.getElementById("title").innerHTML = account.AccountTitle;
document.getElementById("balance").innerHTML = account.AvailableBalance;
document.getElementById("currency").innerHTML = account.AccountCurrency;
document.getElementById("IBAN").innerHTML = account.IBAN;


function TransactionHistory(v, msg)
{
    document.getElementById("transaction-table").innerHTML += "<tr><td> "+new Date()+" </td><td> "+msg+" </td> <td> "+v+" </td></tr>";
}

