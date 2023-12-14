const belajarMateri = () =>{
    return new Promise((resolve)=>{
        setTimeout(()=>{
            resolve("belajarMateri..");
        }, 2000);
    });
}
const UTS = () =>{
    return new Promise((resolve)=>{
        setTimeout(()=>{
            resolve("UTS");
        }, 3000);
    });
}
const UAS = () =>{
    return new Promise((resolve)=>{
        setTimeout(()=>{
            resolve("UAS");
        }, 4000);
    });
}
const semester3 = () =>{
    return new Promise((resolve)=>{
        setTimeout(()=>{
            resolve("semester3....");
        }, 5000);
    });
}
const semester4 = () =>{
    return new Promise((resolve)=>{
        setTimeout(()=>{
            resolve("semester4....");
        }, 5000);
    });
}
const semester5 = () =>{
    return new Promise((resolve)=>{
        setTimeout(()=>{
            resolve("semester5....");
        }, 5000);
    });
}
const semester6 = () =>{
    return new Promise((resolve)=>{
        setTimeout(()=>{
            resolve("semester6....");
        }, 5000);
    });
}
const semester7 = () =>{
    return new Promise((resolve)=>{
        setTimeout(()=>{
            resolve("semester7....");
        }, 5000);
    });
}
const semester8 = () =>{
    return new Promise((resolve)=>{
        setTimeout(()=>{
            resolve("semester8....");
        }, 5000);
    });
}
const wisudaSTTNF = () =>{
    return new Promise((resolve)=>{
        setTimeout(()=>{
            resolve("wisudaSTTNF");
        }, 5000);
    });
}

// consuming await vs promise

const main = async () => {
    console.log(await belajarMateri());
    console.log(await UTS());
    console.log(await UAS());
    console.log(await semester3());
    console.log(await semester4());
    console.log(await semester5());
    console.log(await semester6());
    console.log(await semester7());
    console.log(await semester8());
    console.log(await wisudaSTTNF());
};

main();
