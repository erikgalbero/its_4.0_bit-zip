export class Registration {
    constructor(
        name,               // string
        surname,            // string
        email,              // string + @ + string + . + string
        phone,              // string (number only)
        privacy,            // boolean
        referent,           // target: string
        datetime,           // iso format Date
        reason,             // reasons_id
        note,               // string
        images,             // array Base64
    ) {
        this.name = name;
        this.surname = surname;        
        this.email = email;      
        this.phone = phone;          
        this.privacy = privacy;
        this.referent = referent;       
        this.datetime = datetime;       
        this.reason = reason;     
        this.note= note;      
        this.images = images;         
    }
}