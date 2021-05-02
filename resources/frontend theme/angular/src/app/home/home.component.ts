import { Component, OnInit, ViewEncapsulation, ViewChild } from '@angular/core';
import { Router } from '@angular/router';

import { CommonServiceService } from '../common-service.service';
import { FormControl } from '@angular/forms';
import { Observable } from 'rxjs';
import { map, startWith } from 'rxjs/operators';
import { SlickCarouselComponent } from 'ngx-slick-carousel';
declare const $: any;

export interface Doctors {
  id: number;
  doctor_name: string;
  speciality: string;
  Education: string;
  location: string;
}

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css'],
  // encapsulation : ViewEncapsulation.None
})
export class HomeComponent implements OnInit {
  @ViewChild('slickModal') slickModal: SlickCarouselComponent;
  specialityList: any = [];
  public countries = [
    {
      id: 1,
      name: 'Albania',
      img: 'image',
    },
    {
      id: 2,
      name: 'Belgium',
    },
    {
      id: 3,
      name: 'Denmark',
    },
    {
      id: 4,
      name: 'Montenegro',
    },
    {
      id: 5,
      name: 'Turkey',
    },
    {
      id: 6,
      name: 'Ukraine',
    },
    {
      id: 7,
      name: 'Macedonia',
    },
    {
      id: 8,
      name: 'Slovenia',
    },
    {
      id: 9,
      name: 'Georgia',
    },
    {
      id: 10,
      name: 'India',
    },
    {
      id: 11,
      name: 'Russia',
    },
    {
      id: 12,
      name: 'Switzerland',
    },
  ];
  constructor(
    public router: Router,
    public commonService: CommonServiceService
  ) {
  }

  ngOnInit() {
    window.scrollTo(0, 0);
    this.getspeciality();
  }

  slides = [
    {
      service_img: 'assets/img/services/service-01.jpg',
      user_img: 'assets/img/customer/user-01.jpg',
      service_name: 'Toughened Glass Fitting Services',
      name: 'Cleaning',
      country: 'Wayne, New Jersey ',
      amount: '$25',
      mobile: 'xxxxxxxx49',
    },
    {
      service_img: 'assets/img/services/service-02.jpg',
      user_img: 'assets/img/customer/user-02.jpg',
      service_name: 'Car Repair Services',
      name: 'Automobile',
      country: 'Hanover, Maryland ',
      amount: '$50',
      mobile: 'xxxxxxxx85',
    },
    {
      service_img: 'assets/img/services/service-03.jpg',
      user_img: 'assets/img/customer/user-03.jpg',
      service_name: 'Electric Panel Repairing Service',
      name: 'Electrical',
      country: 'Kalispell, Montana ',
      amount: '$45',
      mobile: 'xxxxxxxx30',
    },
    {
      service_img: 'assets/img/services/service-04.jpg',
      user_img: 'assets/img/customer/user-04.jpg',
      service_name: 'Steam Car Wash',
      name: 'Car Wash',
      country: 'Electra, Texas',
      amount: '$14',
      mobile: 'xxxxxxxx74',
    },
    {
      service_img: 'assets/img/services/service-05.jpg',
      user_img: 'assets/img/customer/user-05.jpg',
      service_name: 'House Cleaning Services',
      name: 'Cleaning',
      country: 'Sylvester, Georgia',
      amount: '$100',
      mobile: 'xxxxxxxx91',
    },
    {
      service_img: 'assets/img/services/service-06.jpg',
      user_img: 'assets/img/customer/user-06.jpg',
      service_name: 'Computer & Server AMC Service',
      name: 'Computer',
      country: 'Los Angeles, California',
      amount: '$80',
      mobile: 'xxxxxxxx92',
    },
    {
      service_img: 'assets/img/services/service-07.jpg',
      user_img: 'assets/img/customer/user-07.jpg',
      service_name: 'Interior Designing',
      name: 'Interior',
      country: 'Hanover, Maryland',
      amount: '$5',
      mobile: 'xxxxxxxx28',
    },
    {
      service_img: 'assets/img/services/service-08.jpg',
      user_img: 'assets/img/customer/user-08.jpg',
      service_name: 'Building Construction Services',
      name: 'Construction',
      country: 'Burr Ridge, Illinois',
      amount: '$75',
      mobile: 'xxxxxxxx62',
    },
    {
      service_img: 'assets/img/services/service-09.jpg',
      user_img: 'assets/img/customer/user-09.jpg',
      service_name: 'Commercial Painting Services',
      name: 'Painting',
      country: 'Huntsville, Alabama',
      amount: '$500',
      mobile: 'xxxxxxxx75',
    },
    {
      service_img: 'assets/img/services/service-10.jpg',
      user_img: 'assets/img/customer/user-10.jpg',
      service_name: 'Plumbing Services',
      name: 'Plumbing',
      country: 'Richmond, Virginia',
      amount: '$150',
      mobile: 'xxxxxxxx13',
    },
  ];
  slideConfig = {
    dots: true,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  };

  getspeciality() {
    this.commonService.getSpeciality().subscribe((res) => {
      this.specialityList = res;
    });
  }

  windowTop() {
    window.scrollTo(0, 0);
  }
}
