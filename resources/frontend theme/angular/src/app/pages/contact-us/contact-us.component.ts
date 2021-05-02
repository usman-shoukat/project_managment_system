import { Component, OnInit,OnDestroy } from '@angular/core';
import { Location } from '@angular/common';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-contact-us',
  templateUrl: './contact-us.component.html',
  styleUrls: ['./contact-us.component.css']
})
export class ContactUsComponent implements OnInit,OnDestroy {

  constructor(private location:Location,public commonSerivce:CommonServiceService) { }

  ngOnInit(): void {
     this.commonSerivce.nextmessage('chat');
  }
  ngOnDestroy() {
    this.commonSerivce.nextmessage('');
  }
  back() {
  	 this.location.back()
  }

}
