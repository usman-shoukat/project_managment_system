import { Component, OnInit, TemplateRef } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-add-rating-type',
  templateUrl: './add-rating-type.component.html',
  styleUrls: ['./add-rating-type.component.css']
})
export class AddRatingTypeComponent implements OnInit {
  constructor(private router: Router) { }
  ngOnInit(): void {}
  submit() {
    this.router.navigate(['/admin/rating-type']);
  }
}
