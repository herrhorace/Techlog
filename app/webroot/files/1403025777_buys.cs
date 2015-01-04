using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Ctick
{
    #region Buys
    public class Buys
    {
        #region Member Variables
        protected string _product_id;
        protected string _user_id;
        protected string _ticket_amount;
        protected string _ticket_class_;
        protected string _ticket_class_;
        protected string _ticket_class_;
        protected string _ticket_id;
        #endregion
        #region Constructors
        public Buys() { }
        public Buys(string product_id, string user_id, string ticket_amount, string ticket_class_, string ticket_class_, string ticket_class_, string ticket_id)
        {
            this._product_id=product_id;
            this._user_id=user_id;
            this._ticket_amount=ticket_amount;
            this._ticket_class_=ticket_class_;
            this._ticket_class_=ticket_class_;
            this._ticket_class_=ticket_class_;
            this._ticket_id=ticket_id;
        }
        #endregion
        #region Public Properties
        public virtual string Product_id
        {
            get {return _product_id;}
            set {_product_id=value;}
        }
        public virtual string User_id
        {
            get {return _user_id;}
            set {_user_id=value;}
        }
        public virtual string Ticket_amount
        {
            get {return _ticket_amount;}
            set {_ticket_amount=value;}
        }
        public virtual string Ticket_class_
        {
            get {return _ticket_class_;}
            set {_ticket_class_=value;}
        }
        public virtual string Ticket_class_
        {
            get {return _ticket_class_;}
            set {_ticket_class_=value;}
        }
        public virtual string Ticket_class_
        {
            get {return _ticket_class_;}
            set {_ticket_class_=value;}
        }
        public virtual string Ticket_id
        {
            get {return _ticket_id;}
            set {_ticket_id=value;}
        }
        #endregion
    }
    #endregion
}